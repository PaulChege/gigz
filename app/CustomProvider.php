<?php
namespace App;

use Illuminate\Http\Request;
use Dingo\Api\Routing\Route;
use Dingo\Api\Auth\Provider\Authorization;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use App\User;

class CustomProvider extends Authorization
{
public function authenticate(Request $request, Route $route)
{
$this->validateAuthorizationHeader($request);

if($user=User::where('api_token',$request->bearerToken())->first()) {
    return $user;
}
throw new UnauthorizedHttpException('Unable to authenticate');


}

public function getAuthorizationMethod()
{
return 'bearer';
}
}