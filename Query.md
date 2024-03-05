# query  teamid
$mypasswords = \App\Models\MyPassword::query()
    ->with(['category' => function ($query) {
        $query->select('id', 'name');
    }])
    ->select('id', 'title', 'user_name', 'password', 'url', 'notes', 'category_id', 'team_id')
    ->where('team_id', '=', (new \App\Services\GetCurrentTeamIdService())->get())
    ->where(function($query) use ($search) {
        $query->where('id', 'REGEXP', $search)
              ->orWhere('title', 'REGEXP', $search)
              ->orWhere('user_name', 'REGEXP', $search)
              ->orWhere('url', 'REGEXP', $search)
              ->orWhere('notes', 'REGEXP', $search);
    })
    ->orderBy($orderBy, $sort)
    ->paginate($perPage);