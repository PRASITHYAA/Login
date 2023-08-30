<form action="{{ route('disclaimer.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- success --}}

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Expected date to join -->
    <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Expected date to join <span
                style="color: red;">*</span></label>
        <input style="background-color: rgba(248, 235, 235, 0.726);" type="date" class="form-control"
            placeholder="Expected date to join" id="validationDefault01" name="Expectedatetojoin" required>
    </div>
    <button>save</button>
</form>
