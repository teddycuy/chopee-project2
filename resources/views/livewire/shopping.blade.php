<div>
  <div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                  KERANJANG
                </div>
                <div class="card-body">
                    {{ $jumlah }}
            </div>
        </div>

        <div class="card">
            <div class="card-header">
              BELANJAAN SAYA
            </div>
            <div class="card-body">
                @foreach ($datas as $item )
                     <p>{{ $item->nama_barang }} </p>
                @endforeach
        </div>
    </div>

    </div>
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                  PRODUK
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                            <img src="{{ asset('gambar/tab.jpg') }}" class="card-img-top"
                            alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Tab</h5>
                            <p class="card-text">Bisa dimainkan</p>
                            </div>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">Rp. 6.000.000</li>
                            </ul>
                            <div class="card-body">
                            <button class="btn btn-primary" wire:click="simpan('Tab', '6000000')">BELI</button>
                        </div>
                     </div>
                    </div>
                            <div class="col-3">
                                <div class="card">
                                <img src="{{ asset('gambar/stick.jpg') }}" class="card-img-top"
                                alt="...">
                                <div class="card-body">
                                <h5 class="card-title">stick</h5>
                                <p class="card-text">Bisa dimainkan</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item">Rp. 500.000</li>
                                </ul>
                                <div class="card-body">
                                <button class="btn btn-primary" wire:click="simpan('stick', '500000')">BELI</button>
                            </div>
                         </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                            <img src="{{ asset('gambar/stick.jpg') }}" class="card-img-top"
                            alt="...">
                            <div class="card-body">
                            <h5 class="card-title">stick</h5>
                            <p class="card-text">Bisa dimainkan</p>
                            </div>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">Rp. 500.000</li>
                            </ul>
                            <div class="card-body">
                            <button class="btn btn-primary" wire:click="simpan('stick', '500000')">BELI</button>
                        </div>
                     </div>
                    </div>
