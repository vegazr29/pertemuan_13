@extends('layouts.app')

@section('title','Pengajuan Replacement Class')

@section('content')

        <style>
            container {
                width: 100%;
                text-align: left;
            }
            row {
                width: 100%;
            }
            container1{
                margin-left:10px;
            }
            /* body{
                padding: 15px;
            } */
            /* h5{
                margin-top: -15px;
            } */
            /* table, th, td{
                border: 1px solid;
            } */
        </style>
        <a target="_blank" href="/laporan/replacement/pdf" 
        class="btn btn-primary">Cetak PDF</a>
        <br>
        <br>
        <h1>
        Pengajuan Replacement Class
        </h1>
        <hr>
        <table>
  
            @foreach ($replacement as $rpl)
                <div class="container1">
                    <div class="row">
                    <div class="col">
                    <b class="mt-10">Nama Lengkap</b> 
                    </div>
                    <div class="col">
                    : {{$rpl->nama_lengkap}}<br>
                </div>
                </div>
                </div>
                <div class="row">
                    <div class="col">
                    <b>Nama Mata Kuliah </b> 
                    </div>
                    <div class="col">
                    : {{$rpl->mata_kuliah}}<br>
                </div>
                </div>
                </div>
                <div class="row">
                    <div class="col">
                    <b>Kelas </b> 
                    </div>
                    <div class="col">
                    : {{$rpl->kelas}}<br>
                </div>
                </div>
                </div>
                <div class="row">
                    <div class="col">
                    <b>Program Studi </b> 
                    </div>
                    <div class="col">
                    : {{$rpl->prodi}}<br>
                </div>
                </div>
                </div>
                <div class="row">
                    <div class="col">
                    <b>Semester </b> 
                    </div>
                    <div class="col">
                    : {{$rpl->semester}}<br>
                </div>
                </div>
                </div>
                <div class="row">
                    <div class="col">
                    <b>Tahun Akademik </b> 
                    </div>
                    <div class="col">
                    : {{$rpl->tahun_akademik}}<br>
                </div>
                </div>
                </div>
                <div class="row">
                    <div class="col">
                    <b>Jadwal Tanggal Replacement </b> 
                    </div>
                    <div class="col">
                    : {{$rpl->tahun_akademik}}<br>
                </div>
                </div>
                </div>
                <div class="row">
                        <div class="col">
                        <b>Tanggal Replacement </b> 
                        </div>
                        <div class="col">
                        : {{$rpl->tanggal_replacement}}<br>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <b>Jam Replacement  </b> 
                        </div>
                        <div class="col">
                        : {{$rpl->jam_replacement}}<br>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <b>Alasan melakukan  </b> 
                        <b>replacement class</b>
                        </div>
                        <div class="col">
                        : {{$rpl->alasan_replacement}}<br>
                    </div>
                    </div>
                    </div>
                
            @endforeach
        </table>

@endsection