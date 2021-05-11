<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Competition;
use App\Models\Category;
class ReservationController extends Controller
{
    /**
     * Display a listing of the reservations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $reservations = Reservation::with('category', 'category.competition')->where('user_id', Auth::user()->id)->orderBy('arrival', 'asc')->get();
      return view('dashboard.reservations')->with('reservations', $reservations);
    }
    /**
     * Show the form for creating a new reservation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($competition_id)
    {
      $competitionInfo = Competition::with('categories')->get()->find($competition_id);
      return view('dashboard.reservationCreate', compact('competitionInfo'));
    }
    /**
     * Store a newly created reservation in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->request->add(['user_id' => Auth::user()->id]);
      Reservation::create($request->all());
      return redirect('dashboard/reservations')->with('success', 'Reservation created!');
    }
    /**
     * Display the specified reservation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation) {
      // $reservation = Reservation::with('category', 'category.competition')->get()->find($reservation->id);
      if ($reservation->user_id == Auth::user()->id) {
        $competition_id = $reservation->category->competition_id;
        $competitionInfo = Competition::with('categories')->get()->find($competition_id);    
        return view('dashboard.reservationSingle', compact('reservation', 'competitionInfo'));
      } else 
        return redirect('dashboard/reservations')->with('error', 'You are not authorized to see that.');
    }
    /**
     * Show the form for editing the specified reservation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation) {
      // $reservation = Reservation::with('category', 'category.competition')->get()->find($reservation->id);    
      if ($reservation->user_id == Auth::user()->id) {
        $competition_id = $reservation->category->competition_id;
        $competitionInfo = Competition::with('categories')->get()->find($competition_id);    
        return view('dashboard.reservationEdit', compact('reservation', 'competitionInfo'));
      } else 
        return redirect('dashboard/reservations')->with('error', 'You are not authorized to do that');
    }
    /**
     * Update the specified reservation in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation) {
      if ($reservation->user_id != Auth::user()->id)
          return redirect('dashboard/reservations')->with('error', 'You are not authorized to update this reservation');  
      $reservation->user_id = Auth::user()->id;
      $reservation->num_of_guests = $request->num_of_guests;
      $reservation->arrival = $request->arrival;
      $reservation->departure = $request->departure;
      $reservation->category_id = $request->category_id;      
      $reservation->save();      
      return redirect('dashboard/reservations')->with('success', 'Successfully updated your reservation!');
    }
    /**
     * Remove the specified reservation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation) {
      $reservation = Reservation::find($reservation->id);    
      if ($reservation->user_id == Auth::user()->id) {
        $reservation->delete();     
        return redirect('dashboard/reservations')->with('success', 'Successfully deleted your reservation!');
      } else
        return redirect('dashboard/reservations')->with('error', 'You are not authorized to delete this reservation');
    }
}