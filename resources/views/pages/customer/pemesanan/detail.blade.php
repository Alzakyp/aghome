@extends('layouts.master')
@section('title', 'AG Home Industri')
@section('content')

<div class="container my-4">
    <h4><b>Detail Transaksi</b></h4>
    <section class="section mt-3 ">
        <div class="card">
            <div class="card-header bg-dark">
                <h4 class="p-3 text-center text-white">STATUS BELUM DIBAYAR</h4>
                <div class="form-group text-center m-3">
                    <button type="submit" class="btn btn-outline-primary ml-auto w-50 d-inline-block mb-2"><i data-feather="edit"></i>Bayar Pemesanan</button>
                    <button type="submit" class="btn btn-outline-danger ml-auto w-50 d-inline-block"><i data-feather="edit"></i>Batalkan Pemesanan</button>
                </div>
            </div>
            <div class="card-header bg-success">
                <h4 class="card-title pt-2 text-center">ID Transaksi #0JKSAFD387E</h4>
            </div>

            <div class="table-responsive" style="max-height: 200px; overflow-y: auto;">
                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr class="table-success">
                            <th>No</th>
                            <th>Foto Produk</th>
                            <th>Nama Produk</th>
                            <th>Ukuran</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src=" " width="50" height="50" alt=""></td>
                            <td>Kotak Sanggan</td>
                            <td>20 Cm x 10 Cm</td>
                            <td>12.000</td>
                            <td>10</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src=" " width="50" height="50" alt=""></td>
                            <td>Kotak Sanggan</td>
                            <td>20 Cm x 10 Cm</td>
                            <td>12.000</td>
                            <td>10</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src=" " width="50" height="50" alt=""></td>
                            <td>Kotak Sanggan</td>
                            <td>20 Cm x 10 Cm</td>
                            <td>12.000</td>
                            <td>10</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src=" " width="50" height="50" alt=""></td>
                            <td>Kotak Sanggan</td>
                            <td>20 Cm x 10 Cm</td>
                            <td>12.000</td>
                            <td>10</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src=" " width="50" height="50" alt=""></td>
                            <td>Kotak Sanggan</td>
                            <td>20 Cm x 10 Cm</td>
                            <td>12.000</td>
                            <td>10</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><img src=" " width="50" height="50" alt=""></td>
                            <td>Kotak Sanggan</td>
                            <td>20 Cm x 10 Cm</td>
                            <td>12.000</td>
                            <td>10</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><img src=" " width="50" height="50" alt=""></td>
                            <td>Kotak Sanggan</td>
                            <td>20 Cm x 10 Cm</td>
                            <td>12.000</td>
                            <td>10</td>
                            <td>120.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-body mt-3">
                <form action=" " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="nama_produk">Nama Penerima</label>
                                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" placeholder="Masukkan Nama Penerima" value="{{ old('nama_produk') }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="stok">Nomor HP</label>
                                <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" placeholder="Masukkan Nomor HP" value="{{ old('stok') }}">

                            </div>
                            <div class="form-group mb-3">
                                <label for="deskripsi_produk" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control @error('deskripsi_produk') is-invalid @enderror" id="deskripsi_produk" name="deskripsi_produk" rows="3">{{ old('deskripsi_produk') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <div class="form-group mb-3">
                                <label for="nama_produk">Total Produk</label>
                                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" placeholder="Masukkan Biaya Pengiriman" value="{{ old('nama_produk') }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_produk">Biaya Pengiriman</label>
                                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" placeholder="Masukkan Biaya Pengiriman" value="25000">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_produk">Total Pembayaran</label>
                                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" placeholder="Masukkan Biaya Pengiriman" value="{{ old('nama_produk') }}">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>


@endsection