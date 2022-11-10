package co.sqt.selenium.webdriver.test;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.testng.Assert;
import org.testng.annotations.*;



public class LoginTest {
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
	}
	

	
	
	@Test(priority=2)
	public void VerifyLoginWithCorrectData(){
		Login("jawad12","123");
	}
	
	@Test(priority=1)
	public void VerifyLoginWithInCorrectData(){
		Login("jawad12","abc");
	}
	
	public void Login(String username,String Password){
		WebElement txtbox_uname= driver.findElement(By.name("user_name"));
		txtbox_uname.sendKeys(username);
		
		WebElement txtbox_pass= driver.findElement(By.name("user_pass"));
		txtbox_pass.sendKeys(Password);
		driver.findElement(By.xpath("/html/body/div[1]/section/div/form/button")).click();
		String title=driver.getTitle();
	
		Assert.assertEquals(title, "Home");
	}
	
	
	@AfterMethod
	public void EndTesting(){
		driver.quit();
	}

}
