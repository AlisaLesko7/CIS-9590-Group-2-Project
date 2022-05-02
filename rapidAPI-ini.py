import requests
import json
import os


API_HOST="streaming-availability.p.rapidapi.com"
API_KEY = "3e686ae3e1msh262fb791d79f2e5p135767jsn9d8cb5d5cb2c"
API_URL = "https://streaming-availability.p.rapidapi.com"

headers = {
    "X-RapidAPI-Key": API_KEY,
    'X-RapidAPI-Host': API_HOST
  }


def appendDataToFile(path, filename, data):
    if not os.path.exists(path):
        os.makedirs(path)
    file = open(path+"/"+filename, "w+") 
    json.dump(data, file, indent = 2) 


def getMovies(genreId, service):
    response = requests.get(API_URL+"/search/basic", 
    headers= headers,
    params={"country": "us",
            "service": service,
            "genre": genreId,
            "type": "movie",
            "page": "1",})
    data = response.json()
    print(json.dumps(data['results'], indent = 4, sort_keys=True))
    return data


def getGenres():
    genres = []
    response = requests.get(API_URL+"/genres", headers= headers,params={})
    json = response.json()
    for id in json:
        genre = {"id": id,"name": json[id]}
        genres.append(genre)
    return genres


def saveGenres():
    genres = getGenres()
    appendDataToFile("data","genres.json", genres)


def saveMovies():
    STREAMING_SERVICES = ["netflix", "hulu"]
    file = open('data/genres.json')
    genres = json.load(file)
    print(f"{len(genres)} loaded from data/genres.json")
    movies = []
    for genre in genres:
        for service in STREAMING_SERVICES:
            name = genre['name']
            print(f"Fetching {name} movies for {service}")
            genreMovies = getMovies(genre['id'], service)
            print(f"{len(genreMovies)} found for {name} for {service}")
            movies.append(genreMovies)
        print('\n')

    print(f"{len(movies)} movies found across genre={len(genres)} and service={len(STREAMING_SERVICES)}")
    appendDataToFile("data","movies.json",movies)
    return movies




#saveMovies()
getMovies("18", "netflix")


# saveGenres()