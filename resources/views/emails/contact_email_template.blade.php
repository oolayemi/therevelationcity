<p> <em> <b> {{ $data['firstname'] . " " . $data['lastname'] }}</b></em>  filled the contact form</p>
<p>You can contact them via <em> <b>{{ $data['email'] . ", " . $data['phone'] }}</b> </em> </p>
<p>Here is the details </p>
<div>
    <ul>
        <li>Name: <em> <b> {{ $data['firstname'] . " " . $data['lastname'] }}</b></em></li>
        <li>Contacts: <em> <b> {{ $data['email'] . ", " . $data['phone'] }}</b></em></li>
        <li>Subject: <em> <b> {{ $data['subject'] }} </b>  </em></li>
        <li>Contact information: <em> <b> {{ $data['message'] }}</b></em> </li>
    </ul>
</div>
