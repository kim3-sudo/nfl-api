# NFL Testing API

A testing API that returns NFL play-by-play data from 2010 to 2020 regular seasons.

## API Servers

http://138.28.36.62/index.php

## Endpoints

### GET: `/nfl/getGamesByTeam`

#### Get games by team

Get a list of games as the game ID by a team's abbreviation

#### Prerequisites

- None

#### Rate Limit

Low

#### Request

##### Path Parameters

- None

##### Query-String Parameters

- `teamcode`
  + **Type**: `string`
  + **Allowed**: a valid team abbreviation - see Appendix A
  + **Example**: `teamcode=CLE`

#### Response

##### 200

- **HTTP Status Code**: `200`
- Request was successful
- Note: *A response code of 200 does not necessarily indicate that data was returned. If you pass in an incorrect or invalid team code, the HTTP response code will still be `200`.*

##### 500

- **HTTP Status Code**: `500`
- Internal server error

##### 422

- **HTTP Status Code**: `422`
- Unprocessable content in the body

### GET: `/nfl/getPlaysByGame`

#### Get plays by game

Get a list of plays within a game by the game ID

#### Prerequisites

- None

#### Rate Liimt

Low

#### Request

##### Path Parameters

- None

##### Query-String Parameters

- `game`
  + **Type**: `string`
  + **Allowed**: a valid game ID code
  + **Example**: `2020_19_CLE_KC`

#### Response

##### 200

- **HTTP Status Code**: `200`
- Request was successful
- Note: *A response code of 200 does not necessarily indicate that data was returned. If you pass in an incorrect or invalid team code, the HTTP response code will still be `200`.*

##### 500

- **HTTP Status Code**: `500`
- Internal server error

##### 422

- **HTTP Status Code**: `422`
- Unprocessable content in the body

## Appendix A: Team Abbreviations

| Abbreviation | Team                  |
|--------------|-----------------------|
| ARI          | Arizona Cardinals     |
| ATL          | Atlanta Falcons       |
| BAL          | Baltimore Ravens      |
| BUF          | Buffalo Bills         |
| CAR          | Carolina Panthers     |
| CHI          | Chicago Bears         |
| CIN          | Cincinnati Bengals    |
| CLE          | Clevaland Browns      |
| DAL          | Dallas Cowboys        |
| DEN          | Denver Broncos        |
| DET          | Detroit Lions         |
| GB           | Green Bay Packers     |
| HOU          | Houston Texans        |
| IND          | Indianapolis Colts    |
| JAX          | Jacksonville Jaguars  |
| KC           | Kansas City Chiefs    |
| LA           | Los Angeles Rams      |
| LAC          | Los Angeles Chargers  |
| LV           | Las Vegas Raiders     |
| MIA          | Miami Dolphins        |
| MIN          | Minnesota Vikings     |
| NE           | New England Patriots  |
| NO           | New Orleans Saints    |
| NYG          | New York Giants       |
| NYJ          | New York Jets         |
| PHI          | Philadelphia Eagles   |
| PIT          | Pittsburgh Steelers   |
| SEA          | Seattle Seahawks      |
| SF           | San Francisco 49ers   |
| TB           | Tampa Bay Buccaneers  |
| TEN          | Tennessee Titans      |
| WAS          | Washington Commanders |
