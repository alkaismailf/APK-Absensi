import React, { Component } from "react";
import { Form, Button, Row, Card, Container} from 'react-bootstrap';
import axios from 'axios';
import Swal from 'sweetalert2';

export default class InputKehadiran extends Component{
    constructor (props) {
        super(props)

        //setting up function
        this.onChangeNip = this.onChangeNip.bind(this);
        this.onChangeTglAbsensi = this.onChangeTglAbsensi.bind(this);
        this.onChangeHadir = this.onChangeHadir.bind(this);
        this.onChangeSakit = this.onChangeSakit.bind(this);
        this.onChangeIzin = this.onChangeIzin.bind(this);
        this.onChangeAlpa = this.onChangeAlpa.bind(this);
        this.onSubmit = this.onSubmit.bind(this);

        //setting up state
        this.state = {
            nip: '',
            tgl_absensi: new Date(),
            hadir: false,
            sakit: false,
            izin: false,
            alpa: false,
        }
    }

    onChangeNip(e) {
        this.setState({nip: parseInt(e.target.value)})
    }

    onChangeTglAbsensi(e) {
        this.setState({tgl_absensi: e.target.value})
    }

    onChangeHadir(e) {
        this.setState({hadir: true})
    }

    onChangeSakit(e) {
        this.setState({sakit: true})
    }

    onChangeIzin(e) {
        this.setState({izin: true})
    }

    onChangeAlpa(e) {
        this.setState({alpa: true})
    }

    onSubmit(e) {
        e.preventDefault()
        const dataAbsensi = {
            nip: this.state.nip,
            tgl_absensi: this.state.tgl_absensi,
            hadir: this.state.hadir,
            sakit: this.state.sakit,
            izin: this.state.izin,
            alpa: this.state.alpa
        };
        axios.post('http://127.0.0.1:8000/api/kehadiran/', dataAbsensi)
            .then(res => console.log(res.data));
        Swal.fire(
            'Okay!',
            'Konfirmasi diterima, terimakasih!',
            'success'
        )

        this.setState({
            nip: '', 
            tgl_absensi: new Date(), 
            hadir: false,
            sakit: false,
            izin: false,
            alpa: false,
        })
    }

    render() {
        return (
        <Container>
            <div className="form-wrapper">
            <Card>
                <Card.Body>
                    <Card.Title>
                    <h2>Konfirmasi Kehadiran</h2>
                    </Card.Title>
                </Card.Body>
                <Card.Text>
                    <Form onSubmit={this.onSubmit}>
                        <Row className="justify-content-md-center"> 
                            <Form.Group className="mb-3" controlId="nip">
                                <Form.Label column sm={2}>NIP</Form.Label>
                                <Form.Control type="text" value={this.state.nip} onChange={this.onChangeNip}  placeholder="Masukkan NIP anda"/>
                            </Form.Group>
                            
                            <Form.Group className="mb-3" controlId="tgl_absensi">
                                <Form.Label column sm={2}>Tanggal</Form.Label>
                                <Form.Control type="date" value={this.state.tgl_absensi} onChange={this.onChangeTglAbsensi}/>
                            </Form.Group>  
                              
                        </Row>  
                        <br></br>
                        <Button variant="success" controlId="hadir" value={this.state.hadir} onClick={this.onChangeHadir} type="submit">Hadir</Button>{' '}  
                        <Button variant="danger" controlId="sakit" value={this.state.sakit} onClick={this.onChangeSakit} type="submit">Sakit</Button>{' '}
                        <Button variant="warning" controlId="izin" value={this.state.izin} onClick={this.onChangeIzin} type="submit">Izin</Button>
                        {/* <Button variant="primary" size="lg" block="block" type="submit">
                        Konfirmasi Kehadiran
                        </Button> */}
                    </Form>
                </Card.Text>
            </Card>
          
          <br></br>
          <br></br>
    
          {/* <ExpensesList> </ExpensesList> */}
        </div>
        </Container>
        );
    }
}