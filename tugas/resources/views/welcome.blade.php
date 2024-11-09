<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search for Your Content</h1>

    <!-- Search Form -->
    <form action="/" method="GET">
        <input type="text" name="query" placeholder="Search..." value="{{ request()->get('query') }}">
        <button type="submit">Search</button>
    </form>

    @if(request()->has('query'))
        <h2>Search Results for: "{{ request()->get('query') }}"</h2>

        <!-- Profiles Results -->
        <h3>Profiles:</h3>
        @forelse($profiles as $profile)
            <p>{{ $profile->name }} - {{ $profile->username }} - {{ $profile->email }}</p>
        @empty
            <p>No profiles found.</p>
        @endforelse

        <!-- Books Results -->
        <h3>Books:</h3>
        @forelse($books as $book)
            <p>{{ $book->Judul_Buku }} - {{ $book->Penulis }} - {{ $book->Penerbit }}</p>
        @empty
            <p>No books found.</p>
        @endforelse

        <!-- Journals Results -->
        <h3>Journals:</h3>
        @forelse($journals as $journal)
            <p>{{ $journal->Judul_Jurnal }} - {{ $journal->Penulis }} - {{ $journal->Penerbit }}</p>
        @empty
            <p>No journals found.</p>
        @endforelse

        <!-- FYP Results -->
        <h3>FYPs:</h3>
        @forelse($fyps as $fyp)
            <p>{{ $fyp->Judul_FYP }}</p>
        @empty
            <p>No FYPs found.</p>
        @endforelse

        <!-- CDs Results -->
        <h3>CDs:</h3>
        @forelse($cds as $cd)
            <p>{{ $cd->Judul_CD }} - {{ $cd->Genre }}</p>
        @empty
            <p>No CDs found.</p>
        @endforelse

        <!-- Newspapers Results -->
        <h3>Newspapers:</h3>
        @forelse($newspapers as $newspaper)
            <p>{{ $newspaper->Judul_Newspapers }} - {{ $newspaper->Isi }}</p>
        @empty
            <p>No newspapers found.</p>
        @endforelse
    @endif
</body>
</html>
