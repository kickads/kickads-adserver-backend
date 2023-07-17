<?php

namespace App\Console\Commands;

use App\Models\BackUpAndResetClicks as BackUpAndResetClicksModel;
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
  protected $description = 'Resetea todos los clicks a 0 y guarda los del dia anterior en una tabla backup';

  /**
   * Execute the console command.
   */
  public function handle()
  {
//    BackUp
    $clicks = Click::all();

    $currentDay = now()->format('Y-m-d');

    foreach ($clicks as $click) {
      if ($click->total === 0 && $click->intersticial->end_day >= $currentDay) continue;

      $backUpClick = new BackUpAndResetClicksModel();
      $backUpClick->intersticial_id = $click->intersticial_id;
      $backUpClick->name = $click->name;
      $backUpClick->total = $click->total;
      $backUpClick->date = $currentDay;
      $backUpClick->save();
    }

//    Reset
    Click::where('total', '>', 0)->update([
      'total' => 0
    ]);
  }
}
