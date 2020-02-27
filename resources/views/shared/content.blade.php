<div class="content-page">

    <div class="content">
        @if (session()->has('flash_notification'))
            <div class="row">
                <div class="col-md-12 notifpanel">
                    @include('flash::message')
                </div>
            </div>
        @endif
        @if ($errors->any())
            <div class="row">
                <div class="col-md-12 notifpanel">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        @yield('content')
    </div>

    <footer class="footer">
        <p>© @php echo date('Y') @endphp by Gudang Garam</p>
    </footer>
</div>
