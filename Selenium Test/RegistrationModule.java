package co.sqt.selenium.webdriver.test;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.Select;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.testng.Assert;
import org.testng.annotations.*;



public class RegistrationModule {
	WebDriver  driver;
	
	
	@BeforeMethod
	public void setUp(){
		System.setProperty("webdriver.chrome.driver",".\\drivers\\chromedriver.exe");
		driver=new ChromeDriver();
		driver.manage().timeouts().pageLoadTimeout(30,TimeUnit.SECONDS);
		driver.manage().timeouts().implicitlyWait(20,TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.manage().deleteAllCookies();
		driver.get("http://localhost/PHAWA/PHP/Patient/Patsignin.php");
		driver.findElement(By.xpath("/html/body/div[1]/section/div/button")).click();
	}
	

	@Test(priority=1)
	public void VerifyRegWithCorrectInfo(){
		Verify("MD.JAWADUL","HASAN","22","jawad","jawadulhasan@student.aiub.edu","017-07615221","A+","12sdfsdf3");
		
		
	}
	@Test(priority=2)
	public void VerifyRegWithErrorInfo(){
		Verify("MD.JAWADUL","HASAN","22","jawad","jawadulhasan@student.aiub.edu","017-07615221","A+","12sdfsdf3");
		
		
	}
	
	
	
	public void Verify(String FirstName,String LastName,String Age,String UserName,String Email,String PhoneNo,String Bgrp,String Password){
		
		WebElement txtbox_fname= driver.findElement(By.name("fname"));
		txtbox_fname.sendKeys(FirstName);
		
		WebElement txtbox_lname= driver.findElement(By.name("lname"));
		txtbox_lname.sendKeys(LastName);
		
		WebElement txtbox_age= driver.findElement(By.name("age"));
		txtbox_age.sendKeys(Age);
		
		WebElement txtbox_uname= driver.findElement(By.id("siname"));
		txtbox_uname.sendKeys(UserName);
		
		WebElement txtbox_email= driver.findElement(By.name("user_email"));
		txtbox_email.sendKeys(Email);
		
		WebElement txtbox_phone= driver.findElement(By.name("phnno"));
		txtbox_phone.sendKeys(PhoneNo);
		
		Select se = new Select(driver.findElement(By.name("Bgrp")));
		se.selectByVisibleText(Bgrp);
		
		WebElement txtbox_password= driver.findElement(By.id("sipass"));
		txtbox_password.sendKeys(Password);
		
		
		driver.findElement(By.id("sisubmit")).click();
		String title=driver.getTitle();
		Assert.assertEquals(title, "");
				
		
	}
	
	
	@AfterMethod
	public void EndTesting(){
		driver.quit();
	}

}
