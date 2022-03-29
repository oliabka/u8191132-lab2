<?php

namespace App\Console\Commands;

use App\Models\Address;
use Illuminate\Console\Command;

class CountBuyerAddresses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:count-addresses {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Counts the amount of addresses associated with customer';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $amount = Address::query()->where('buyer_id',$this->argument('id'))->count();
        echo $amount, "\n";
        return $amount;
    }
}
