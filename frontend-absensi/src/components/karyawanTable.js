import React, { Component } from 'react';
// import { Link } from 'react-router-dom';
import { Table, Container, Card, Button } from 'react-bootstrap';
import axios from 'axios';

export default class KaryawanTable extends Component {
    constructor(props) {
        super(props)
        this.state = {
          karyawan: [],
          hiddenTable: false,
        };
    }
    
    // GET Data Karyawan from api backend
    componentDidMount() {
        axios.get('http://127.0.0.1:8000/api/karyawan/')
          .then(res => {
            this.setState({
              karyawan: res.data
            });
          })
          .catch((error) => {
            console.log(error);
          })
    }

    // Show or hide table
    handleChange = e => {
        this.setState({ hiddenTable: !this.state.hiddenTable });
    }
    
    render() {
        const x = this.state.hiddenTable;
        return (
            <Container> 
                  <Card style={{ color: "#000", marginBottom: 15 }}>
                    <Card.Header>                     
                        <h2>Data Karyawan</h2>
                        <Button variant="secondary" onClick={this.handleChange} type="button">Show</Button>
                    </Card.Header>
                    <Card.Body>
                    {
                        x &&(        
                        <Card.Text>
                            <Table variant="dark" bordered hover size="sm">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Fungsional</th>
                                        <th>Struktural</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {this.state.karyawan.map(karyawan =>
                                    <tr key={karyawan.id}>
                                        <td>{karyawan.nip}</td>
                                        <td>{karyawan.nama_pegawai}</td>
                                        <td>{karyawan.fungsional}</td>
                                        <td>{karyawan.struktural}</td>
                                    </tr>
                                )}
                                </tbody>
                            </Table>
                        </Card.Text>
                        )
                    }
                    </Card.Body>
                </Card>
            </Container>
        )
    }
}