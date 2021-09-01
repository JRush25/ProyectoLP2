import React from "react";
import {useState,useEffect} from 'react';
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link,
  useRouteMatch,
  useParams
} from "react-router-dom";

export default function App() {
  return (
    <Router>
      <div>
        <ul>
          <li>
            <Link to="/">Home</Link>
          </li>
          <li>Obras</li>
          <ul>
            <li>
              <Link to="/obras">Ver obras</Link>
            </li>
            <li>
              <Link to="/registrar_obra">Registrar Obras</Link>
            </li>
            <li>
              <Link to="/topics">Topics</Link>
            </li>
          </ul>
        </ul>

        <Switch>
          <Route path="/obras">
            <Obras />
          </Route>
          <Route path="/registrar_obra">
            <CreateObra />
          </Route>
          <Route path="/topics">
            <Topics />
          </Route>
          <Route path="/">
            <Home />
          </Route>
        </Switch>
      </div>
    </Router>
  );
}

function Home() {
  return <h2>Home</h2>;
}

function Obras() {
  const url = 'http://localhost:8000/api/obras/'
  const [obras, setObras] = useState()
  const fetchApi = async () =>{
    const response = await fetch(url)
    const responseJSON = await response.json()
    setObras(responseJSON)
  }

  useEffect(() => {
    fetchApi()
  }, [])

  return (
    <table>
      <caption><h2>Obras</h2></caption>
      <tbody>
        {!obras ? 'Cargando...':
          obras.map((obra,index)=>{
            return <tr key={obra.id}><td>{obra.titulo}</td><td>{obra.descripcion}</td><td>{obra.nombre_archivo}</td></tr>
          }) 
        }
      </tbody>
    </table>
  );
}

function Topics() {
  let match = useRouteMatch();

  return (
    <div>
      <h2>Topics</h2>

      <ul>
        <li>
          <Link to={`${match.url}/components`}>Components</Link>
        </li>
        <li>
          <Link to={`${match.url}/props-v-state`}>
            Props v. State
          </Link>
        </li>
      </ul>

      {/* The Topics page has its own <Switch> with more routes
          that build on the /topics URL path. You can think of the
          2nd <Route> here as an "index" page for all topics, or
          the page that is shown when no topic is selected */}
      <Switch>
        <Route path={`${match.path}/:topicId`}>
          <Topic />
        </Route>
        <Route path={match.path}>
          <h3>Please select a topic.</h3>
        </Route>
      </Switch>
    </div>
  );
}

function Topic() {
  let { topicId } = useParams();
  return <h3>Requested topic ID: {topicId}</h3>;
}

function CreateObra(){

  return(
  <form action="http://localhost:8000/api/obras/" method="post" encType="multipart/ form-data">
    <label>Título:</label>
    <input type="text" id="titulo" name="titulo" required/>
    
    <label>Descripcion:</label>
    <input type="textarea" id="descripcion" name="descripcion" required/>
    
    <label>Archivo:</label>
    <input type="text" id="nombre_archivo" name="nombre_archivo" required/>
    
    <input type="submit" value="Submit" />
  </form>
  );
}