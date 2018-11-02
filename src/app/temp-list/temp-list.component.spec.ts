import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TempListComponent } from './temp-list.component';

describe('TempListComponent', () => {
  let component: TempListComponent;
  let fixture: ComponentFixture<TempListComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TempListComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TempListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
