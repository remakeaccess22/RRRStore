<?

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function destroy()
    {
        Auth::logout(); // Log the user out
        return redirect()->route('login'); // Redirect to the login page
    }
}
