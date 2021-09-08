import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListaforoComponent } from './listaforo.component';

describe('ListaforoComponent', () => {
  let component: ListaforoComponent;
  let fixture: ComponentFixture<ListaforoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListaforoComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ListaforoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
