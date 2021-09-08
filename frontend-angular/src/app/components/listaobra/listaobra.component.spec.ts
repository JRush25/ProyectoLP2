import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListaobraComponent } from './listaobra.component';

describe('ListaobraComponent', () => {
  let component: ListaobraComponent;
  let fixture: ComponentFixture<ListaobraComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListaobraComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ListaobraComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
