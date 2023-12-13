<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="antialiased">


    <div class="container col-6">
        <form id="filterForm" action="/phone-numbers/filter" method="get">
            @csrf
            <div class="row my-5">


                <div class="col-md-5">
                    <div class="from-group">
                        <select name="country"  class="form-control" id="">
                            <option selected disabled>Select Country</option>
                            @foreach ($data as $item)
                                <option value="{{ $item->country }}">{{ $item->country }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="from-group">
                        <select name="state" onchange="submitForm()" class="form-control" id="">
                            <option value="OK" >Valid phone Number</option>
                            <option value="NOK" >Not Valid phone Number</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">

            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Country</th>
                        <th>State</th>
                        <th>Country Code</th>
                        <th>Phone Num</th>
                    </tr>
                    @foreach ($data as $item)
                        <tr>
                            <th>{{ $item->country }}</th>
                            <th>{{ $item->state }}</th>
                            <th>{{ $item->code }}</th>

                            <th>{{ $item->phone }}</th>
                        </tr>
                    @endforeach
                    {{ $data->links() }}
                </table>

            </div>
        </div>
    </div>


    <script>
        function submitForm() {
            document.getElementById("filterForm").submit();
        }
    </script>

</body>

</html>
