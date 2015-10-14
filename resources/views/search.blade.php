<form action="/" method="post" accept-charset="utf-8">
        
        <label for="Search">Search</label><input type="text" name="search" value="" id="Search">
       <input type="hidden" value="{{csrf_token()}}" name="_token" id=""/> 
        <p><input type="submit" value="Search"></p>
</form>

<table border="0" cellspacing="5" cellpadding="5">
        <tr>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        
        </tr>
@foreach($results as $result)
        <tr>
        
        <td>{{$result->City}}</td>
        <td>{{$result->State}}</td>
        <td>{{$result->Zipcode}}</td>
        </tr>
@endforeach
</table>
