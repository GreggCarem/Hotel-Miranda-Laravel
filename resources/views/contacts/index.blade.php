<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
</head>
<body>
    <h1>Contacts</h1>
    <a href="{{ route('contacts.create') }}">Create New Contact</a>
    <ul>
        @foreach ($contacts as $contact)
            <li>
                ID: {{ $contact->id }} - Date: {{ $contact->date }} - Name: {{ $contact->name }} - Email: {{ $contact->email }} 
                - Message: {{ Str::limit($contact->message, 50) }} 
                - Archive Status: {{ $contact->archiveStatus ? 'Archived' : 'Active' }}
                - Created At: {{ $contact->created_at }} - Updated At: {{ $contact->updated_at }}
                <a href="{{ route('contacts.show', $contact->id) }}">View</a> |
                <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a> |
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>