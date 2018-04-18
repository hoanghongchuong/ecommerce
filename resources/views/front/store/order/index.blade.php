@extends('front.store.layout')
@section('contentStore')
    <main class="tk-overlay">
        <section class="banner">
            <img src="{{ asset('/front/images/banner/tk-banner.jpg')}}" alt="" title="">
        </section>
        @include('front.store._particals.headerStore')
        <section class="tk-manage-product">
            <div class="container">
                <h1 class="title-page mgb-20">Danh sách đơn hàng</h1>
                <div class="manageProduct-action">
                    <div class="row">
                        <div class="col-md-6 flex-center">

                            {{--<div class="search search-product">--}}
                                {{--<form>--}}
                                    {{--<input type="text" placeholder="Từ khóa...">--}}
                                    {{--<button><i class="fa fa-search"></i> </button>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        </div>
                        <div class="col-md-6 flex-center-end">

                        </div>
                    </div>
                </div>
                <div class="form-manageProduct">
                    <table class="table table-responsive table-normal">
                        <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Giá bán</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                        </tr>
                        </thead>
                        <tbody>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tbody>
                    </table>

                </div>
            </div>
        </section>

    </main>
@endsection