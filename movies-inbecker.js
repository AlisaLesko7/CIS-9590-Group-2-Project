const axios = require("axios");
const fs = require("fs-extra")


const API_KEY = "bBtVIT4kXYx83KX1mu6plUkyGrIwVzxb";
const moviesApi = axios.create({
  baseURL: "https://streaming-availability.p.rapidapi.com",
  headers: {
    "X-RapidAPI-Host": "streaming-availability.p.rapidapi.com",
    "X-RapidAPI-Key": API_KEY,
  },
});

const getMovies = async (genreId, service) => {
  const response = await moviesApi.get("/search/basic", {
    params: {
      country: "us",
      service: service,
      genre: genreId,
      type: "movie",
      page: "1",
    },
  });

  return response.data.results
};


const getGenres = async () => {
  const response = await moviesApi.get("/genres", {
  });


  return Object.entries(response.data).map(tuple => {
    return {
      id: tuple[0],
      name: tuple[1]
    }
  })
};


const saveGenres = () => {
  return getGenres().then(async (data) => {
    await fs.outputJson("data/genres.json", data, {spaces: 2})
  })

}



const saveMovies = async () => {
  const genres = await fs.readJson("data/genres.json")
  console.log(`${genres.length} loaded from data/genres.json`)
  const STREAMING_SERVICES = ["netflix", "hulu"] //, "prime", "disney", "hbo", "apple"]
  const movies = []
  for (const genre of genres) {
    for (const service of STREAMING_SERVICES) {
      console.log(`Fetching ${genre.name} movies for ${service}`)
      const genreMovies = await getMovies(genre.id, service)
      console.log(`${genreMovies.length} found for ${genre.name} for ${service}`)
      movies.push(...genreMovies)
    }
  }
  console.log(`${movies.length} movies found across ${genres.length} and ${STREAMING_SERVICES.length}`)
  await fs.outputJson("data/movies.json", movies, {spaces: 2})
  return movies
}
saveMovies().then(() => console.log("done"))
// getMovies("18", "netflix").then(resp => console.log(resp))