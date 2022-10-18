<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class EmployeeExport implements FromCollection,WithHeadings
{
  
    public function headings(): array{
        return[
            'id',
            'name',
            'email',
            'age',
            'designation',
        ];
    }
    public function collection()
    {
        return collect(Employee::getEmployee());
    }
}
