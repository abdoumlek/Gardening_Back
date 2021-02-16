<h1>Demande de contact</h1>
<table>
      <tr>
            <td>Objet de votre demande: </td>
            <td>{{$content->subject}}</td>
      </tr>
      <tr>
            <td>Nom: </td>
            <td>{{$content->last_name}}</td>
      </tr>
      <tr>
            <td>Prénom: </td>
            <td>{{$content->first_name}}</td>
      </tr>
      <tr>
            <td>Email: </td>
            <td>{{$content->email}}</td>
      </tr>
      <tr>
            <td>Numéro de téléphone: </td>
            <td>{{$content->phone_number}}</td>
      </tr>
      <tr>
            <td>content: </td>
            <td>{{$content->message}}</td>
      </tr>
</table>