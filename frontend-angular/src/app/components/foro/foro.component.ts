import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import {FormsModule,ReactiveFormsModule} from '@angular/forms';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';

@Component({
  selector: 'app-foro',
  templateUrl: './foro.component.html',
  styleUrls: ['./foro.component.css']
})
export class ForoComponent implements OnInit {
  comment= "";
  postComment=[];
  public listForo:any = []


  postear(){
    this.postComment.push(this.comment);
    this.comment="";
  }

  constructor(private http:HttpClient) { }

  ngOnInit(): void {
    this.cargarData();

  }

  onSubmit(data)
  {    
    this.http.post('http://localhost:8000/api/foro',data)
    .subscribe((result)=>{
      console.log(result)
    },
    (error: HttpErrorResponse)=>{
      console.log(error);
    }) 
     
  }

  public cargarData(){
    this.http.get('http://localhost:8000/api/foro').subscribe((result)=>{
      this.listForo = result;
    })
  }



}