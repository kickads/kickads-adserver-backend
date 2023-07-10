<?php

namespace App\Console\Commands;

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
  protected $description = 'Resetea todos las interacciones a su valor por defecto y guarda los del dia anterior en la tabla';

  /**
   * Execute the console command.
   */
  public function handle()
  {
    Interaction::where('total', '>', 0)->update([
      'total' => 0
    ]);
  }
}
