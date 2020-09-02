
<?
use App\Contact;

public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'phone'
        ]);
        $contact = new Contact([
            'name' => $request->get('name'),
            'last_name' => $request->get('last_name'),
            'phone' => $request->get('phone'),
            
        ]);
        $contact->save();
        return redirect('/contacts')->with('success', 'Contact saved!');
    }
