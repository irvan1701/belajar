@extends('layout.layout')

@section('content')

<div class="container-fluid mt-4">
  <H1>Selamat Datang, {{ Auth::user()->name }}</H1>
  <br>
  <section id="top-members" class="container table-container">
    <h2 class="section3-title"><strong>Pemasukan Keuangan APMI</strong></h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Member ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Biro</th>
                <th>Member Point</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>APMI001</td>
                <td>Irvan Nurfauzan Saputra</td>
                <td>Manajer of IT</td>
                <td>Riset</td>
                <td>1200</td>
            </tr>
        </tbody>
    </table>
</section>


</div>




@endsection

