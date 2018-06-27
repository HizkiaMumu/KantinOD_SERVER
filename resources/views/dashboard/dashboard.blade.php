@extends('master-dashboard')
@section('title', 'Dashboard | Kantin OD')
@section('style')

@endsection
@section('content')

  @if(Auth::user()->level == 0 || Auth::user()->level = 1)

    <div class="row">

      <div class="col-lg-3">
        <div class="card pull-up">
          <div class="card-content bg-gradient-directional-danger">
            <div class="card-body bg-hexagons-danger">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h6 class="text-muted white">Pengguna</h6>
                  <h3 class="white">885</h3>
                </div>
                <div class="align-self-center">
                  <i class="icon-users white font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card pull-up">
          <div class="card-content bg-gradient-directional-danger">
            <div class="card-body bg-hexagons-danger">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h6 class="text-muted white">Kurir</h6>
                  <h3 class="white">50</h3>
                </div>
                <div class="align-self-center">
                  <i class="icon-users white font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card pull-up">
          <div class="card-content bg-gradient-directional-danger">
            <div class="card-body bg-hexagons-danger">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h6 class="text-muted white">Penjual</h6>
                  <h3 class="white">12</h3>
                </div>
                <div class="align-self-center">
                  <i class="icon-users white font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card pull-up">
          <div class="card-content bg-gradient-directional-danger">
            <div class="card-body bg-hexagons-danger">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h6 class="text-muted white">Jumlah Transaksi</h6>
                  <h3 class="white">Rp. 88.568,00</h3>
                </div>
                <div class="align-self-center">
                  <i class="la la-money white font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  @elseif(Auth::user()->level = 2)

    <div class="row">

      <div class="col-lg-3">
        <div class="card pull-up">
          <div class="card-content bg-gradient-directional-danger">
            <div class="card-body bg-hexagons-danger">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h6 class="text-muted white">Jumlah Pengantaran</h6>
                  <h3 class="white">885</h3>
                </div>
                <div class="align-self-center">
                  <i class="la la-exchange white font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card pull-up">
          <div class="card-content bg-gradient-directional-danger">
            <div class="card-body bg-hexagons-danger">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h6 class="text-muted white">Point</h6>
                  <h3 class="white">885</h3>
                </div>
                <div class="align-self-center">
                  <i class="la la-star-o white font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card pull-up">
          <div class="card-content bg-gradient-directional-danger">
            <div class="card-body bg-hexagons-danger">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h6 class="text-muted white">Wallet</h6>
                  <h3 class="white">885</h3>
                </div>
                <div class="align-self-center">
                  <i class="la la-money white font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  @endif

@endsection
