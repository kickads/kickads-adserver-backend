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
    Click::where('total', '>', 0)->update([
      'total' => 0
    ]);
  }
}
