<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Menu\Pondit\Models\PayrollManagement;

class PayrollExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Employee ID',
            'Name',
            'Ta/Da',
            'Basic Salary',
            'Medical',
            'Home',
            'Tax',
            'Total',
            'Deleted_at',
            'Created_at',
            'Updated_at'
        ];
    }
    public function collection()
    {
        return PayrollManagement::all();
    }
}
