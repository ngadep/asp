<?php

use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts =[
            [
                'company_id'=>'1',
                'group_id'=>'1',
                'code'=>'11100',
                'name'=>'Dana Uang Kasir',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'1',
                'code'=>'11200',
                'name'=>'Kas Besar Hasil Penjualan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'1',
                'code'=>'11300',
                'name'=>'Bank',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'2',
                'code'=>'12100',
                'name'=>'Piutang Dagang',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'2',
                'code'=>'12110',
                'name'=>'Cadangan Kerugian Piutang',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'2',
                'code'=>'12200',
                'name'=>'Piutang Karyawan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'2',
                'code'=>'12300',
                'name'=>'Piutang Non Usaha',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'3',
                'code'=>'13100',
                'name'=>'Persediaan Barang',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'3',
                'code'=>'13200',
                'name'=>'Koreksi Stok',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'4',
                'code'=>'14100',
                'name'=>'Biaya Dibayar Dimuka',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'4',
                'code'=>'14200',
                'name'=>'Uang Muka Pembelian',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'4',
                'code'=>'14300',
                'name'=>'Pajak Dibayar di Muka',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'4',
                'code'=>'14400',
                'name'=>'Asuransi Dibayar di Muka',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'5',
                'code'=>'15100',
                'name'=>'Tanah',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'5',
                'code'=>'15200',
                'name'=>'Bangunan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'5',
                'code'=>'15210',
                'name'=>'Akumulasi Penyusutan Bangunan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'5',
                'code'=>'15300',
                'name'=>'Mesin dan Peralatan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'5',
                'code'=>'15310',
                'name'=>'Akumulasi Penyusutan Mesin dan Peralatan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'5',
                'code'=>'15400',
                'name'=>'Mebel dan Alat Tulis Kantor',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'5',
                'code'=>'15410',
                'name'=>'Akumulasi Penyusutan Mebel dan ATK',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'5',
                'code'=>'15500',
                'name'=>'Kendaraan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'5',
                'code'=>'15510',
                'name'=>'Akumulasi Penyusutan Kendaraan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'5',
                'code'=>'15700',
                'name'=>'Harta Lainnya',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'5',
                'code'=>'15710',
                'name'=>'Akumulasi Penyusutan Harta Lainnya',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'6',
                'code'=>'16100',
                'name'=>'Bangunan Dalam Proses',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'7',
                'code'=>'21100',
                'name'=>'Hutang Dagang',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'7',
                'code'=>'21200',
                'name'=>'Uang Muka Penjualan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'7',
                'code'=>'21300',
                'name'=>'Biaya yang Masih Harus Dibayar',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'7',
                'code'=>'21400',
                'name'=>'Hutang Pajak Penjualan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'7',
                'code'=>'21500',
                'name'=>'Hutang Gaji',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'7',
                'code'=>'21600',
                'name'=>'Hutang Jangka Pendek',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'8',
                'code'=>'22100',
                'name'=>'Sewa Diterima di Muka',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'9',
                'code'=>'23200',
                'name'=>'Hutang Jangka Panjang',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'11',
                'code'=>'31100',
                'name'=>'Modal Saham',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'11',
                'code'=>'31200',
                'name'=>'Modal yang Belum Ditempatkan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'11',
                'code'=>'31300',
                'name'=>'Modal Belum Disetor',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'12',
                'code'=>'32100',
                'name'=>'Laba ditahan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'12',
                'code'=>'32200',
                'name'=>'Laba Tahun Berjalan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'12',
                'code'=>'32999',
                'name'=>'Historical Balancing',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'13',
                'code'=>'41100',
                'name'=>'Penjualan Barang Dagangan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'13',
                'code'=>'41200',
                'name'=>'Return dan Potongan Pembelian',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'13',
                'code'=>'41300',
                'name'=>'Pendapatan Denda Keterlambatan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'13',
                'code'=>'41400',
                'name'=>'Pendapatan atas Pengantarana',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'15',
                'code'=>'51100',
                'name'=>'Harga Pokok Penjualan (HPP)',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'15',
                'code'=>'51200',
                'name'=>'Return dan Potongan Penjualan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'15',
                'code'=>'51300',
                'name'=>'Biaya atas Pengiriman Barang',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'16',
                'code'=>'52100',
                'name'=>'Kerugian Piutang',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'16',
                'code'=>'52300',
                'name'=>'Biaya Denda Keterlambatan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'16',
                'code'=>'52400',
                'name'=>'Kerusakan dan Kegagalan Material',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'17',
                'code'=>'61100',
                'name'=>'Gaji Direksi dan Karyawan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'17',
                'code'=>'61200',
                'name'=>'Listrik, Air dan Telpon',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'17',
                'code'=>'61300',
                'name'=>'Transportasi/ Perjalanan Dinas',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'17',
                'code'=>'61400',
                'name'=>'Administrasi Kantor',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'18',
                'code'=>'62100',
                'name'=>'Penyusutan Bangunan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'18',
                'code'=>'62110',
                'name'=>'Penyusutan Mesin dan Peralatan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'18',
                'code'=>'62120',
                'name'=>'Penyusutan Mebel dan ATK',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'18',
                'code'=>'62130',
                'name'=>'Penyusutan Kendaraan',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'18',
                'code'=>'62150',
                'name'=>'Penyusutan Harta Lainnya',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'19',
                'code'=>'81100',
                'name'=>'Selisih setor Kasir',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'19',
                'code'=>'81200',
                'name'=>'Listing Fee',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'19',
                'code'=>'81300',
                'name'=>'Hasil Sewa',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'20',
                'code'=>'91100',
                'name'=>'Biaya Bunga',
                'user_id'=>'1',
            ],
            [
                'company_id'=>'1',
                'group_id'=>'20',
                'code'=>'91110',
                'name'=>'Jasa Bank',
                'user_id'=>'1',
            ],
        ];

        DB::table('accounts')->insert($accounts);
    }
}
