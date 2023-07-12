<?php
class UserController extends BaseController {
    public function getGamesByTeam() {
        $strErrorDesc = '';
        $requestMethod = $_SERVER["REQUEST_METHOD"];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = explode('/', $uri);
        if (strtoupper($requestMethod) == 'GET' && $uri[2] == 'nfl') {
            try {
                $userModel = new UserModel();
                $team = $_GET["teamcode"];
                $arrayGames = $userModel->getTeamGames($team);
                $responseData = json_encode($arrayGames);
            } catch (Error $e) {
                $strErrorDesc = $e->getMessage().'. Something went wrong.';
                $strErrorHeader = 'HTTP/1.1 500 Internal Server Error';
            }
        } else {
            $strErrorDesc = 'Method not supported';
            $strErrorHeader = 'HTTP/1.1 422 Unprocessable Content';
        }
        if (!$strErrorDesc) {
            $this->sendOutput(
                $responseData,
                array('Content-Type: application/json', 'HTTP/1.1 200 OK')
            );
        } else {
            $this->sendOutput(json_encode(array('error' => $strErrorDesc)),
            array('Content-Type: application/json', $strErrorHeader)
        );
        }
    }
    public function getPlaysByGame() {
        $strErrorDesc = '';
        $requestMethod = $_SERVER["REQUEST_METHOD"];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = explode('/', $uri);
        if (strtoupper($requestMethod) == "GET" && $uri[2] == 'nfl') {
            try {
                $userModel = new UserModel();
                $game = $_GET["game"];
                $arrayPlays = $userModel->getGamePlays($game);
                $responseData = json_encode($arrayPlays);
            } catch (Error $e) {
                $strErrorDesc = $e->getMessage().'. Something went wrong.';
                $strErrorHeader = 'HTTP/1.1 500 Internal Server Error';
            }
        } else {
            $strErrorDesc = 'Method not supported';
            $strErrorHeader = 'HTTP/1.1 422 Unprocessable Content';
        }
        if (!$strErrorDesc) {
            $this->sendOutput(
                $responseData,
                array('Content-Type: application/json', 'HTTP/1.1 200 OK')
            );
        } else {
            $this->sendOutput(json_encode(array('error' => $strErrorDesc)),
            array('Content-Type: application/json', $strErrorHeader)
        );
        }
    }
}
