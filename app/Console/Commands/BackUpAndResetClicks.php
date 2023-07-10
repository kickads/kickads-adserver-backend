<?php

namespace App\Console\Commands;

use App\Models\Click;
use Illuminate\Console\Command;

class BackUpAndResetClicks extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'backup-and-reset-clicks';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Resetea todos los clicks a su valor por defecto y guarda los del dia anterior en la tabla';

  /**
   * Execute the console command.
   */
  public function handle()
  {
//    BackUp
    $clicks = Click::all();
//
    foreach ($clicks as $click) {
      $backUpClick = new \App\Models\BackUpAndResetClicks();
      $backUpClick->intersticial_id = $click->intersticial_id;
      $backUpClick->name = $click->name;
      $backUpClick->total = $click->total;
      $backUpClick->date = now()->format('Y-m-d');
      $backUpClick->save();
    }

//    Reset
    Click::where('total', '>', 0)->update([
      'total' => 0
    ]);
  }
}
