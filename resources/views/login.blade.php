@foreach ($login as $log)
    @if ($username == $log->username && $password == $log->password)
        <script>
            window.location = "/home";
        </script>
    @else
        <script>
            window.location = "/";
        </script>
    @endif
@endforeach
