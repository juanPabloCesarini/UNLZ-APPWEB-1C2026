<?php include 'view/layout/header.php'; ?>

<div class="calculator-card">
    <h4 style="text-align: center; color: var(--blackberry-cream); margin-bottom: 20px;">Calculadora</h4>
    
    <form method="POST" action="index.php" id="calcForm">
        <input type="hidden" name="operacion" id="operacionInput" value="">
        
        <div class="grid">
            <div class="display">
                <?php echo isset($resultado) ? $resultado : (isset($error) ? 'Error' : '0'); ?>
            </div>

            <input type="number" name="num1" class="custom-input" placeholder="Num 1" required>
            <input type="number" name="num2" class="custom-input" placeholder="Num 2" required>

            <button type="button" class="btn-operator op-btn" onclick="seleccionarOp('suma', this)">+</button>
            <button type="button" class="btn-operator op-btn" onclick="seleccionarOp('resta', this)">-</button>
            <button type="button" class="btn-operator op-btn" onclick="seleccionarOp('multiplicacion', this)">×</button>
            <button type="button" class="btn-operator op-btn" onclick="seleccionarOp('division', this)">÷</button>
            
            <button type="button" onclick="window.location.href='index.php'" class="btn-special btn-zero">AC</button>
            <button type="submit" class="btn-equal">=</button>
        </div>
    </form>
</div>

<script>
function seleccionarOp(op, elemento) {
    document.getElementById('operacionInput').value = op;
    
    document.querySelectorAll('.op-btn').forEach(btn => {
        btn.classList.remove('active-op');
    });
    
    elemento.classList.add('active-op');
}
</script>

<?php include 'view/layout/footer.php'; ?>