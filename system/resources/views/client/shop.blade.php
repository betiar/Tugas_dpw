@extends('client.base')

@section('content')
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Shop</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <div class="container p-0">
            <div class="row">
              <!-- SHOP LISTING-->
              <div class="col-lg-12 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                  <div class="col-lg-12">
                    <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0 float-right">
                      <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th-large"></i></a></li>
                      <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th"></i></a></li>
                      <li class="list-inline-item">
                        <select class="selectpicker ml-auto" name="sorting" data-width="200" data-style="bs-select-form-control" data-title="Default sorting">
                          <option value="default">Default sorting</option>
                          <option value="popularity">Popularity</option>
                          <option value="low-high">Price: Low to High</option>
                          <option value="high-low">Price: High to Low</option>
                        </select>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <!-- PRODUCT-->
                  @foreach($list_produk as $produk)
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.html"><img style="width: 300px; height: 300px;" class="img-fluid w-100" src="{{url("public/$produk->gambar")}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{url('cart')}}">Add to cart</a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{url('detail')}}">{{$produk->nama}}</a></h6>
                      <p class="small text-muted">{{$produk->format_harga}}</p>
                    </div>
                  </div>
                  @endforeach
                  
                </div>
                <div class="float-right">
                    {{$list_produk->links()}}
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection