@extends('layouts.front.master')

@section('content')
<div class="container">
    @php $sectors = \App\Models\Sector::all() @endphp
    @foreach($sectors as $sector)
        <h1 class="p-4">{{ $sector->name }}</h1>
        @php $trainings = \App\Models\CourseTitle::where('sector_id', $sector->id)->get() @endphp
        <table class="table table-striped table-hover">
                <!-- head line -->
            <tr style="background-color: rgb(205, 238, 238);">
                <th>
                    Date
                </th>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Course Level</th>

                <th>Course Duration</th>
                <th>Fees (INR) Including GST</th>
                <th>Location</th>
                <th>Apply Now
                </th>


            </tr>
            <!-- 1 coloum -->
            @foreach($trainings as $training)
                <tr>
                    <td>{{ $training->from_date }}</td>
                    <td>{{ $training->course_code }}</td>
                    <td>{{ $training->course_title }}</td>
                    <td>{{ $training->course_level->name }}</td>
                    <td>{{ $training->duration }}</td>
                    <td>RS. {{ $training->course_registration_fee }}</td>
                    <td>{{ $training->course_location }}</td>
                    <td>
                        <a style=" font-weight: bold;" class="btn btn-warning mx-1  btn-e1"
                           href="{{ route('trainings.view', $training->id) }}">Apply
                            now</a>
                    </td>
                </tr>
          @endforeach
        </table>
    @endforeach
</div>

</table>


</div>
@endsection
