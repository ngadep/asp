<?php

namespace App\Repositories;

use App\Models\Company;
use App\Models\Journal;
use App\Models\JournalDetail;

class JournalRepositoy
{
    protected $company;

    public function __construct(Company $company)
    {
        $this->company = $company->find(session('perusahaan_aktif'));
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function listJournal()
    {
        return Journal::where('company_id',$this->company->id)
            ->where('month',$this->company->month_period)
            ->where('year',$this->company->year_period)
            ->orderBy('id','desc');
    }

    public function detailJournal($id){
        return JournalDetail::join('accounts','journal_details.account_id', '=', 'accounts.id')
            ->where('journal_details.journal_id','=',$id)
            ->select('accounts.code','accounts.name',
                'journal_details.debit','journal_details.credit')
            ->get();
    }
}