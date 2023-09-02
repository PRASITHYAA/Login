{{-- error --}}
@if ($errors->any())
    <div class=" alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{-- success --}}

@if (session('success'))
    <div class=" container  alert alert-success">
        {{ session('success') }}
    </div>
@endif

</div>
<div class="container-fluid">
    <div class="container">
        <form action="{{ route('achievement.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <p class="border-bottom">List out your Acheivements here <span class="form-label red">*</span> </p>
            <div class="mb-3">

                <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                    name="achievement" id="achievement" placeholder="">
            </div>
            <h4>Have you been published any conference papers/attended conferences? </h4>
            <!-- first one -->

            <label>
                <input type="radio" name="open-input" value="yes" onclick="showInput()">
                Yes
            </label>
            <br>
            <label>
                <input type="radio" name="open-input" value="no" onclick="hideInput()">
                No
            </label>
            <div id="input-field" style="display: none;">
                <!-- Conference -->
                <div class="mb-3">
                    <p class="border-bottom ">Please use this section to indicate the Conference Details. Please
                        limit
                        your writing for this part to a maximum of 500 words.</p>
                    <label for="exampleFormControlInput1" class="form-label">Conference</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" type="" class="form-control"
                        name="Conference" id="Conference" placeholder="">
                </div>
            </div>

            <!-- buttons -->
            <div style="display: flex;justify-content:end;" class="pt-5">
                <a class="btn btn-secondary m-1" href="employment">Previous</a>
                <button class="btn btn-primary m-1">Save </button>
                <a class="btn btn-secondary m-1" href="disclaimer">Next</a>
            </div>
        </form>
    </div>


</div>







<script>
    function showInput() {
        const inputFieldDiv = document.getElementById('input-field');
        inputFieldDiv.style.display = 'block';
    }

    function hideInput() {
        const inputFieldDiv = document.getElementById('input-field');
        inputFieldDiv.style.display = 'none';
    }

    function showInput2() {
        const inputFieldDiv = document.getElementById('input-field-2');
        inputFieldDiv.style.display = 'block';
    }

    function hideInput2() {
        const inputFieldDiv = document.getElementById('input-field-2');
        inputFieldDiv.style.display = 'none';
    }

    function showInput3() {
        const inputFieldDiv = document.getElementById('input-field-3');
        inputFieldDiv.style.display = 'block';
    }

    function hideInput3() {
        const inputFieldDiv = document.getElementById('input-field-3');
        inputFieldDiv.style.display = 'none';
    }

    function showInput4() {
        const inputFieldDiv = document.getElementById('input-field-4');
        inputFieldDiv.style.display = 'none';
    }

    function hideInput4() {
        const inputFieldDiv = document.getElementById('input-field-4');
        inputFieldDiv.style.display = 'block';
    }
</script>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>

</html>
