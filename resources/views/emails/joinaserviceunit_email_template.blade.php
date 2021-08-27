<p> <em> <b>{{ $data['firstname'] . " " . $data['lastname'] }}</b> </em> would like to join a service unit</p>
<p>They would like to join the <em> <b>{{ $data['unit'] }}</b> </em></p>
<p>You can contact them via <em> <b>{{ $data['email'] }}</b>  </em></p>
<p>Here is the details </p>
<div>
    <ul>
        <li>Name: <em> <b>{{ $data['firstname'] . " " . $data['lastname'] }}</b> </em></li>
        <li>Unit interested: <em> <b>{{ $data['unit'] }}</b>  </em></li>
        <li>Contact information: <em> <b> {{ $data['email'] }}</b></em> </li>
    </ul>
</div>
