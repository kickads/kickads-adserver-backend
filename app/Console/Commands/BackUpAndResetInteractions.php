<?php

namespace App\Console\Commands;

use App\Models\BackUpAndResetInteractions as BackUpAndResetInteractionsModel;
use App\Models\Interaction;
use Illuminate\Console\Command;

class BackUpAndResetInteractions extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'backup-and-reset-interactions';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Resetea todas las interacciones a 0 y guarda los del dia anterior en una tabla backup';

  /**
   * Execute the console command.
   */
  public function handle()
  {
    //    BackUp
    $interactions = Interaction::all();

    foreach ($interactions as $interaction) {
      if ($interaction->total === 0) continue;

      $backUpInteraction = new BackUpAndResetInteractionsModel();
      $backUpInteraction->intersticial_id = $interaction->intersticial_id;
      $backUpInteraction->name = $interaction->name;
      $backUpInteraction->total = $interaction->total;
      $backUpInteraction->date = now()->format('Y-m-d');
      $backUpInteraction->save();
    }

//    Reset
    Interaction::where('total', '>', 0)->update([
      'total' => 0
    ]);
  }
}