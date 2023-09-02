<div class="container-fluid">
    <div class="container">
        <form action="{{ route('achievement.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- first one -->

            <label>
                <input type="radio" name="open-input" value="yes" id="yesRadio1" onclick="showInputs()" >
                Yes
            </label>
            <br>
            <label>
                <input type="radio" name="open-input" value="no"  id="noRadio1 " onclick="hideInputs()" >
                No
            </label>
            <div id="input-field" style="display: none;">
                <!-- Conference -->
                <div class="mb-3">
                    <p class="border-bottom ">Please use this section to indicate the Conference Details. Please
                        limit
                        your writing for this part to a maximum of 500 words.</p>
                    <label for="exampleFormControlInput1" class="form-label">Conference</label>
                    <input style="background-color: rgba(248, 235, 235, 0.726);" type=""
                        class="form-control Conference" name="Conference" id="Conference" placeholder="">
                </div>
            </div>

    </div>
    <!-- buttons -->
        <button class="btn btn-primary m-1">Save </button>
    </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- yes or no --}}
<script>
    $(document).ready(function () {
       $('#yesRadio1').click(function () {
        $('.Conference').attr('required', true);
       });
        $('#noRadio1').click(function () {
            $('.Conference').attr('required', false);
        });

    });
</script>
