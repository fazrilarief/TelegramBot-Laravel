<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kirim Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="{{ route('sendMessage') }}" method="POST">
        @csrf
        <div class="container w-25 my-4">
            <div class="card">
                <div class="card-header">
                    <h3>Kirim Pesan ke Telegram</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Masukan Pesan</label>
                        <textarea name="pesan" id="pesan" cols="10" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Kirim!</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
