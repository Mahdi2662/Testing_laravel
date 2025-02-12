use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/rooms/large', [RoomController::class, 'getLargeRooms']);
