@extends("panel.layouts.ubold")
@section("head")
    <link rel="stylesheet" href="{{ asset("panel/assets/libs/datatables.net/jquery.dataTables.min.css") }}">
    <title>فنجان ایرانی | لیست دسته ها</title>
@endsection
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">داشبورد</a></li>
                                <li class="breadcrumb-item active">تیکت ها</li>
                            </ol>
                        </div>
                        <h4 class="page-title d-inline-block">{{ $ticket->subject }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex align-items-start mb-3">
                                <img src="../assets/images/users/user-1.jpg" class="me-2 rounded-circle" height="42" alt="Brandon Smith">
                                <div class="w-100">
                                    <h5 class="mt-2 mb-0 font-15">
                                        <a href="contacts-profile.html" class="text-reset">{{ $ticket->user->name." ".$ticket->user->family }}</a>
                                    </h5>
                                </div>
                            </div>

                            <h6 class="font-13 text-muted text-uppercase mb-2">تیکت های قبلی</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">

                    <div class="card">
                        <div class="card-body py-2 px-3 border-bottom border-light">
                            <div class="row justify-content-between py-1">
                                <div class="col-sm-7">
                                    <div class="d-flex align-items-start">
                                        <img src="{{ asset("panel/assets/images/users/user-5.jpg") }}" class="me-2 rounded-circle" height="36" alt="Brandon Smith">
                                        <div>
                                            <h5 class="mt-2 mb-0 font-15">
                                                <a href="contacts-profile.html" class="text-reset">{{ $ticket->user->name." ". $ticket->user->family }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div id="tooltips-container">
                                        <a href="tel:{{ $ticket->user->mobile }}" class="text-reset font-19 py-1 px-2 d-inline-block">
                                            <i class="fe-phone-call" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="تماس"></i>
                                        </a>
                                        <a href="{{ route("admin.ticket.close",["ticket" => $ticket->code]) }}" class="text-reset font-19 py-1 px-2 d-inline-block">
                                            <i class="mdi mdi-block-helper" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="بستن تیکت"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="conversation-list" data-simplebar style="max-height: 460px;">
                                @forelse($ticket->messages as $message)
                                <li class="clearfix @if($message->is_admin) odd @endif">
                                    <div class="chat-avatar">
                                        <img src="{{ asset("panel/assets/images/users/user-5.jpg") }}" class="rounded" alt="James Z" />
                                        <i>{{ \Morilog\Jalali\Jalalian::forge($message->created_at)->format("i : H") }}</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>{{ $message->user->name." ". $message->user->family }}</i>
                                            <p>
                                                {{ $message->message }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                @empty
                                    -
                                @endforelse
                            </ul>
                            <div class="row">
                                <div class="col">
                                    <div class="mt-2 bg-light p-3 rounded">
                                        <form class="needs-validation" action="{{ route("profile.ticket.message.store",["ticket" => $ticket->code]) }}" method="post">
                                            <input type="hidden" name="is_admin" value="1">
                                            @csrf
                                            <div class="row">
                                                <div class="col mb-2 mb-sm-0">
                                                    <textarea class="form-control border-0" placeholder="پیام خود را بنویسید" required="" name="message"></textarea>
                                                </div>
                                                <div class="col-sm-auto">
                                                    <div class="btn-group">
                                                        <button type="submit" class="btn btn-success chat-send w-100"><i class="fe-send"></i></button>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row-->
                                        </form>
                                    </div>
                                </div>
                                <!-- end col-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")

@endsection
