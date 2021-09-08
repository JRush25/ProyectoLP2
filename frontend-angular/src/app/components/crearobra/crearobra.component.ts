import { Component, OnInit } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';

@Component({
  selector: 'app-crearobra',
  templateUrl: './crearobra.component.html',
  styleUrls: ['./crearobra.component.css']
})
export class CrearobraComponent implements OnInit {

  constructor(private http:HttpClient) { }

  ngOnInit(): void {
  }

  onSubmit(data)
  {    
    this.http.post('http://localhost:8000/api/obras',data)
    .subscribe((result)=>{
      console.log(result)
      window.location.assign("http://localhost:4200/obra");
    },
    (error: HttpErrorResponse)=>{
      console.log(error);
    }) 
     
  }

}
