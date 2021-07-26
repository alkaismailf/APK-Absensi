import React from "react";
import logo from './logo.svg';
import './App.css';
// import { Container, Row, Col, Nav, Navbar } from 'react-bootstrap';
// import bootstrap css
import 'bootstrap/dist/css/bootstrap.css';

import { BrowserRouter as Router } from "react-router-dom";

import InputKehadiran from "./components/input-kehadiran.component";
import KaryawanTable from "./components/karyawanTable";

function App() {
  return (
    <Router>
      <div className="App">
          <header className="App-header">
            <img src={logo} className="App-logo" alt="logo" />
            <h2>Absensi Karyawan</h2>
            <br></br>
          </header>
          <KaryawanTable />
          <br></br>
          <InputKehadiran />
      </div>
    </Router>
  );
}

export default App;
