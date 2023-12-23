<div>
    Dear {{ $first_name.' '.$last_name }},<br><br>
    Greetings,<br>
    <p>We would like to express our appreciation for the interest shown in our training program. We have received your application for the following training:</p>
    <table>
        <tr>
            <th style="text-align: left">Sector			</th>
            <th style="text-align: left">: {{ $sector }}</th>
        </tr>
        <tr>
            <th style="text-align: left">Course Code		</th>
            <th style="text-align: left">: {{ $course_code }}</th>
        </tr>
        <tr>
            <th style="text-align: left">Course Title		</th>
            <th style="text-align: left">: {{$course_title}}</th>
        </tr>
        <tr>
            <th style="text-align: left">Course Level		</th>
            <th style="text-align: left">: {{ $course_level }}</th>
        </tr>
        <tr>
            <th style="text-align: left">Course Duration	</th>
            <th style="text-align: left">: {{ $duration }} Days</th>
        </tr>
        <tr>
            <th style="text-align: left">Date			</th>
            <th style="text-align: left">: {{ $from_date }} to {{ $to_date }}</th>
        </tr>
        <tr>
            <th style="text-align: left">Venue			</th>
            <th style="text-align: left">: {{ $course_location }}</th>
        </tr>
    </table>
    <p>
        We assure that the training program will meet your expectations and uplift your professional career.
    </p>
    <p>
        Also note that our representatives will contact you if required for any changes/issues regarding the course schedule, payment, course location, etc. Please note that the training course may be rescheduled for any unavoidable situation like natural disorder, pandemic situation, government guidelines, etc.
    </p>
    <p>
        We would like to once again remind your that the course fee is non-refundable, if you are not attending the course.</p>
    <p>
        Should you have any queries or need more information, please contact us at <b><a href="mail:training@tisecon.com">training@tisecon.com</a></b> or <b>+91 44 35862654</b> during our office working hours <b>(Monday to Saturday - 08:00 AM to 05:00 PM)</b> and office will remain closed on Sundays and Public Holidays as per local government regulations/guidelines.
    </p>
    <p>
        Thank you for considering our training program, and we look forward to welcoming you for the training course "<b>{{$course_title}}</b>".
    </p>
    <p>"Wishing You all the very Best"</p>
    <p>Regards,<br>
        <b>Tisecon Training Institute</b></p>
</div>
