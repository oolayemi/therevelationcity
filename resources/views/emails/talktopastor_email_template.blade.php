<p> <em> <b> {{ $data['firstname'] . " " . $data['lastname'] }}</b></em>  would like to talk with you</p>
<p>You can contact them via <em> <b>{{ $data['reach'] }}</b> </em> </p>
<p>Here is the details </p>
<div>
    <ul>
        <li>Name: <em> <b> {{ $data['firstname'] . " " . $data['lastname'] }}</b></em></li>
        <li>Reach via: <em> <b> {{ $data['reach'] }} </b>  </em></li>
        <li>Contact information: <em> <b> {{ $data['reachValue'] }}</b></em> </li>
    </ul>
</div>
